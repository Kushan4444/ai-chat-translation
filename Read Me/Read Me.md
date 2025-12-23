 AI Chat Translation System (PHP + MySQL)

 Project Description

This project is a web-based chat application developed using PHP, MySQL, HTML, CSS, and JavaScript. 
The system allows normal users to send chat messages, which are automatically translated into Sinhala
using the Google Translate API. An Admin Panel 
is provided where the administrator can view translated messages as well as the original messages sent by users.


## Note About Google Translate API

This project uses Google Translate API for message translation.
However, due to API pricing limitations, the API key is not included
in this submission.

The translation logic and API integration code are fully implemented.
If a valid Google Translate API key is added to `translate.php`,
the system will automatically translate messages into Sinhala.

All other system functionalities work correctly without the API key.



* User authentication
* Admin authenticationS
* Session management
* Database operations (CRUD)
* API integration
* AJAX-based chat updates

---

## Main Features

### User Side

* User login using username (no password required)
* Real-time chat interface
* Automatic message translation to Sinhala
* Messages stored securely in database


## Admin Access
Admin credentials are stored in the database for evaluation purposes.
Please refer to the demonstration or viva for admin login details.

### Admin Side

* Secure admin login
* View list of registered users
* View each user's messages
* Display translated message with option to view original message

---

## Technologies Used

* Frontend: HTML5, CSS3, JavaScript (AJAX, Fetch API)
* Backend: PHP (Procedural + MySQLi)
* Database: MySQL
* API: Google Translate API
* Server: XAMPP / WAMP / Localhost

---

## Folder & File Structure

```
/ai_chat1
│── index.html              # Main login selection page
│── user_login.php          # User login page
│── admin_login.html        # Admin login page
│── admin_login.php         # Admin login logic
│── chat.php                # User chat interface
│── admin.php               # Admin dashboard
│── send.php                # Send and translate messages
│── fetch.php               # Fetch user messages (AJAX)
│── translate.php           # Google Translate API integration
│── db.php                  # Database connection
│── chat.js                 # Chat JavaScript logic
│── style.css               # Chat & admin styles
│── style1.css              # Login page styles
│── images (1.png)          # UI image assets
```

---

## Database Structure

### Database Name

```
ai_chat1
```

### Table: users

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  password VARCHAR(100) NULL,
  role ENUM('user','admin')
);
```

### Table: messages

```sql
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  original_message TEXT,
  translated_message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## How the System Works

1. User logs in using a username
2. User sends a message through the chat interface
3. Message is sent to `send.php`
4. Message is translated into Sinhala using Google Translate API
5. Original and translated messages are stored in the database
6. Admin logs in and selects a user
7. Admin can view translated messages and original messages

---

## Setup Instructions

1. Install or WAMP
2. Start Apache and MySQL services
3. Create a database named `ai_chat1`
4. Import the SQL tables provided above
5. Place the project folder inside `htdocs`
6. Add your Google Translate API key inside `translate.php`
7. Open browser and navigate to:

   ```
   http://localhost/ai_chat1/index.html
   ```

---


## Security Notes

* Sessions are used to protect admin and user pages
* Prepared statements are used when inserting messages
* Direct access to admin/user pages is restricted

---

## Future Improvements

* Password hashing for admin login
* Real-time WebSocket chat
* User registration with passwords
* Message timestamps in UI
* Multi-language support

---

## Conclusion

This project successfully demonstrates a chat application with AI-powered translation, suitable for learning PHP backend development, database handling, and API integration. It is ideal for educational and academic project submissions.

---


### Login Page
![Login Page](login.PNG)

### User Login Page
![User Login](User_login.PNG)

### Admin Login Page
![Admin Login](Admin_login.PNG)

### Chat Interface
![Chat Interface](chat_interface.PNG)

### Admin Dashboard
![Admin Dashboard](admin_dashboard.PNG)

### Admin Message View
![Admin Messages](admin_message_view.PNG)



