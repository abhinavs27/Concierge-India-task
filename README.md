# How I successfully approach to the task:
1. Created a form in index.php asking email and csv file upload
2. Uploaded the csv file to getCsvData.php url and showed the message "Images are being uploaded, you'll get an email when it's done"
3. Now the csv is being store in db
4. uploadImage.php will upload all image file from Web URL to our local server. This saveLocalPath.php save image path in  local server.
5.  createThumbnail.php script create thumbnails of saved image in  local server
6.  After all the images have finished processing, sending a mail to the user that the task is successful.
