#!/usr/bin/python

from sys import argv
from datetime import datetime
from os import stat, system
# from paramiko import SSHClient

# Get input file name
script, fileName = argv

# Get current date and format it
time = datetime.now()
date = time.strftime("%Y-%m-%d")
# Make new file name for post file
tempPostName = 'post_' + date
print "Temporary post name is %s" % tempPostName

# # Connect to server as SFTP
# print 'Connecting to server as SFTP'
# ssh = SSHClient()
# ssh.load_system_host_keys()
# ssh.connect('74.74.104.22', port=22, username='pi', key_filename='/Users/AndrewDBooth/.ssh/id_rsa.pub')
# sftp = ssh.open_sftp();
# print 'SFTP session established'

# Count number of posts posted today
print 'Counting posts posted today'
count = 1
while True:
    try:
        stat(tempPostName + '_' + str(count) + '.md')
    except OSError, e:
        break
    print "\t%i" % count
    count += 1

# Build post filename using newfound day count
postName = tempPostName + '_' + str(count) + '.md'
print "Final post name is %s" % postName

# Rename local file
system('mv ' + fileName + ' ' + postName)
print 'File %s saved' % postName
