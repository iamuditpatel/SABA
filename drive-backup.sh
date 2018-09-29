#!/bin/sh

#Our temporary backups will be arhived in this folder
TMPBACKUP='/root/tmp/'
#Website to backup (used only for naming purposes)
SITE='saba.com'
#Directory that will be archived and backed up
BACKUPDIR='/home/site/public_html'
#Remote Google Drive directory ID where the file will be uploaded
ID='1jpo7nmWVw8JHY2TMplNZQkUqfoPfo9Ao'

if [ ! -d "$TMPBACKUP" ]; then
        mkdir $TMPBACKUP
fi

cd $TMPBACKUP
#Archive the directory
tar -zcf "$SITE-$(date '+%Y-%m-%d').tar.gz" $BACKUPDIR

# upload to google drive and delete the source file
drive upload "$SITE-$(date '+%Y-%m-%d').tar.gz" --parent $ID --delete
