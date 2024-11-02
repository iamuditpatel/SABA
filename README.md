# SABA
SNAP AUTO BACKUP APPLICATION. (it's an snapshot backup that backup website to cloud)

Certainly! Here’s the detailed explanation formatted in Markdown:

---

# Snapshot Auto Backup Application (SABA)

### Project Overview

**SABA** (Snapshot Auto Backup Application) is a web-based application designed to create backups of a website by archiving its files and uploading them to Google Drive for storage. This system includes several components:

1. **Backup Shell Script** (`drive-backup.sh`): Archives the website directory and uploads it to Google Drive.
2. **Web Interface** (`saba.php`): A front-end web page for initiating backups or potential restorations.
3. **PHP Execution Script** (`run-backup.php`): Executes the shell script from the web interface when a user clicks the "Backup" button.

---

### Component Breakdown

#### 1. Backup Shell Script (`drive-backup.sh`)

This shell script is the core of the backup process. Here’s a breakdown of its structure:

- **Variables**:
  - `TMPBACKUP`: Defines a temporary directory (`/root/tmp/`) where the backup file will be temporarily stored.
  - `SITE`: Sets a site identifier (`saba.com`) used for naming the archive file.
  - `BACKUPDIR`: Specifies the path to the website directory (`/home/site/public_html`) that will be archived.
  - `ID`: The ID of the Google Drive folder where the backup file will be uploaded.

- **Directory Check**:
  - The script checks if the `TMPBACKUP` directory exists. If it doesn’t, the script creates it, ensuring that backups won’t fail due to a missing directory.

- **Archiving the Directory**:
  - The command `tar -zcf` creates a `.tar.gz` archive of `BACKUPDIR`. The file is named with the format `saba.com-YYYY-MM-DD.tar.gz` to include the date, making it easier to identify when each backup was created.

- **Uploading to Google Drive**:
  - The `drive` command uploads the archive to a specific Google Drive folder (using the folder ID provided in `ID`). After uploading, the local copy of the archive is deleted.

**Note**: The `drive` command-line tool (from GitHub’s `drive` repository) must be installed, configured, and authenticated on your server.

---

#### 2. Web Interface (`saba.php`)

The `saba.php` file provides a user interface to initiate backups or restorations. Here’s a breakdown of its structure:

- **Structure**:
  - The HTML file includes a header and two buttons.
  - **Backup Button**: Clicking this button calls `run-backup.php`, triggering the `drive-backup.sh` script to perform the backup.
  - **Restore Button**: Currently redirects to the same page (`?`). This may be updated to call a restore script or page.

- **Switch Control**:
  - A toggle switch labeled "DAILY|WEEK" is on the page. It currently has no functionality but appears to be for toggling between daily and weekly backups. JavaScript could be added to handle this functionality in the future.

- **Styling**:
  - Uses Bootstrap for general styling and a few custom styles for the toggle switch, buttons, and background color.

---

#### 3. PHP Execution Script (`run-backup.php`)

The `run-backup.php` file is responsible for executing the `drive-backup.sh` script when the "Backup" button is clicked on the web interface.

- **Script Execution**:
  - The PHP `shell_exec` function calls `drive-backup.sh`. When the "Backup" button is clicked, this PHP file runs, triggering the shell script to perform the backup.

- **Permissions**:
  - Ensure that the `run-backup.php` file and the web server user have execution permissions for `drive-backup.sh`.

- **Security Note**:
  - Since this setup allows web-based backup initiation, it’s recommended to secure the page with access controls to prevent unauthorized access.

---

### Summary of Process Flow

Here’s a high-level overview of how everything works together:

1. **User Initiates a Backup**:
   - A user opens `saba.php` and clicks the "Backup" button.

2. **Backup Script Execution**:
   - The "Backup" button triggers `run-backup.php`, which uses `shell_exec` to run `drive-backup.sh`.

3. **Backup Process**:
   - `drive-backup.sh` checks for the temporary directory (`TMPBACKUP`), creates it if necessary, then archives the website directory.
   - The archive is named with the site identifier and the current date.
   - After archiving, the script uploads the backup to Google Drive, deletes the local copy, and completes.

4. **Future Potential**:
   - You could extend the functionality by adding scheduled backups (using CRON), integrating restore functionality, and securing the web interface.

---

### Next Steps and Considerations

- **Functionality Enhancements**:
  - Consider adding a cron job to automate the backup process.
  - Implement "Restore" functionality if you plan to add restoration from Google Drive.
  - Make the toggle switch functional to switch between daily and weekly backup schedules.

- **Security**:
  - Secure `saba.php` to prevent unauthorized access.
  - Ensure that sensitive information, like folder IDs or authentication tokens, is securely stored and handled.

---

This setup creates a foundational backup application with room for future improvements. Let me know if you’d like to dive deeper into any specific part or need assistance with further enhancements!
