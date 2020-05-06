# fabapp
Operational Software for any fablab or makerspace

FabApp was designed as a scaleable system to address the specific needs of the UTA FabLab, built as an open source project to address the needs of our FabLab and makerspaces around the world. This system is the underlying software that supports OctoPuppet(3D printing management) and JuiceBox(an access control device for anything). [Together](https://drive.google.com/open?id=0BzhfhIHqhlx1ekFxRVc0VTBLRHc) this allows an organization to monitor all equipment, mediate equipment access through training requirements, manage inventory, and track/store completed objects for its users.

This is a project in progress and will continue to have additional functionality added over time. Currently, we are under development and on V1.0.  Please stay tuned and in touch as this project reaches maturity!  For additional information please visit [Google Drive](https://drive.google.com/open?id=0BzhfhIHqhlx1WldacWF0d3lkYWs) concerning additional information for both end-users and developers.
If you have any questions, please contact fablab@uta.edu.


CSE 3311 Team 6 Notifications Project 

Added Notification functionality with transactions similar to what is implemented in wait queue with email and text. User is notified on ticket opening, when the balance is changed, when the ticket is ready (triggered by a button for staff members on the index page, similar again to wait queue), and when the ticket is closed. Added a notifications settings page, where the logged in user can turn off each of these notifications, along with a button that drops their contact information from any tickets they have open. If the user is an admin they also have buttons here that drops all information for all tickets, and a button that drops information from all tickets over 24 hours old. Otherwise the information is dropped when the ticket is closed. The notification settings page can be reached from a link on the drop menu or from a link on the notifications tab.

Added a drop down that shows the logged in User's 2 top wait queue tickets, their most recent ticket with a balance due, and their top 4 open tickets. If the logged in user is a service memebrr, this drop down instead displays the 5 most recent service tickets. A notifications tab was also added that displays all the logged in user's wait queue tickets and transactions in an expanded table. 


File changes and implementation

******************New Files*************

Alerts.sql -sql of all our changes to the database. Incudes initialisation of the alerts table along with the adding of the settings field to the users table

New Pages:
notifications.php -page for the notifications tab
notifications_settings.php -page for the notifications settings
sendAlert.php -sub page to implement the js function sendAlertMessage(), which is called when the button on the main page is pressed for the ticket is ready notification

Alerts.php -class where all of the alert functionality is stored in its functions. This includes the making and clearing of alerts profiles, sending alerts (which in turn calls the already implemented notificaitons functionality in Notifications.php class after checking the user settings), and getting/checking user setting 

****************Changed Pages**************

header.php -added the new drop down functionality, along with links to notificiations tab and notifications_settings
index.php -added notification button functionality
fabapp.js - added sendAlertMessage() function which called by button on index, can be called anywhere clientside if desired, sends transaction id, subject and message to to sendAlert.php which then calls alerts class
create.php - added fields to store email and phone for transaction, to be stored in alerts table. If making from a wait queue then leaving these blank will import these from the wait queue, if the user has that enabled. FIlling them in will override info imported from wait queue ticket, or if no wait queue ticket will add to alerts tabl normally
users.php - added store settings function, and function for getting most recent ticket with a balance for drop down
wait_queue.php - added calls to alerts to store info to alerts before info is dropped if is being processed into a transaction, does not affect if wait_queue ticket is canceled
transactions.php - added calls to alerts to store info for transactions, attach transaction id to alerts profile, send notifications on create, balance change and end, and call to remove info from alerts when the transaction is ended



**************Changes in github that should NOT be implemented on fabapp server***********

The following changes were done for testing purposes to fix error being thrown outside of our scope, most likely due to not fully populated databases
As such they should not be implemented on the fabapp server
These changes are marked in code blocks by //*******test changes do not implement and show what parts should be commented out and what should be uncommented instead

transaction.php - transaction end buttonwas throwing an error from the sql injection in update_transaction(). For testing we made the end button simply delete the transaction
end.php - to avoiud same error as above, one line was commented out to avoid calling update_transaction()

wait_ticket.php - creating a wait queue ticket did not work as for some reason was not reading response from js console correctly. temporary change made to skip check for js response from console

Notifications.php (Capitol N, this is the class file that already exists before our change)-already implemented sendMail was changed to use phpmailer so as not to require email server for testing. Instructions in file to revert, or simply dont import any changes for this file
