#  Role-Based School Management System (RBSMS)



## Disclaimer
Please note that the system is currently under development. Some features and functionalities may not be fully operational yet. We are working diligently to enhance the platform, and updates will be provided as new functionalities are added. 

## Summary
The Role-Based School Management System is a web-based solution designed to streamline and optimize academic management processes in educational institutions. By implementing role-specific access for three key user groups—Teachers, Students, and Admins—the system ensures secure and efficient handling of tasks such as student admissions, teacher management, attendance tracking, and announcement dissemination. This system enhances productivity and organization within the school environment by automating essential operations and delivering features tailored to each user's responsibilities.


## User Descriptions

### Teachers
Teachers: Added by the admin, teachers gain access to their dashboards upon approval. From their dashboard, they can take attendance, view historical attendance records, and post notices, such as assignment deadlines or class announcements.

### Students
Students can register for admission, and upon admin approval, they can log in to their personalized dashboards to view personal details such as attendance records and announcements. Students cannot access or modify other users’ data or post any announcements.

### Admins
Admins have complete control over the system. They manage the approval or rejection of teacher and student applications, update user details, and publish school-wide notices. Their role ensures proper governance, maintenance, and data security within the system.

## System Features by User Role

### Teacher Role
- Teachers can manage their students' attendance and view historical records.
- Teachers have the ability to post notices or reminders for upcoming assignments and deadlines.

### Student Role
- Students can view personal information, including their attendance records.
- Students are restricted from modifying others' data.

### Admin Role
- Admins manage user accounts (approve or reject applications),and post school-wide announcements or notices.
- Admins maintain system security by ensuring proper user access controls and system upkeep.

---

## Screenshots

1. **Homepage Dashboard**  
   ![Homepage Dashboard](screenshots/homepage.png)

2. **Admin Dashboard**  
   ![Admin Dashboard](screenshots/admin.png)

3. **Teachers Dashboard**  
   ![Teachers Dashboard](screenshots/teacher.png)

4. **Student Dashboard**  
   ![Student Dashboard](screenshots/student_dashboard.png)

---


## Installation and Setup
1. Clone this repository to your local machine.
   ```bash
   git clone https://github.com/ItsMeMarkAnthony/ROLE-BASED-MANEGMENT-SYSTEM.git

   

This platform is developed using PHP. To run it locally, please follow these steps:

1. **Download and Install XAMPP**  
   You can download XAMPP from the official website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html). XAMPP includes Apache, MySQL, PHP, and other useful tools.

2. **Add the Project Files to the `htdocs` Directory**  
   Once XAMPP is installed, move the project folder into the `htdocs` directory of your XAMPP installation. The default location for `htdocs` is:
   - Windows: `C:\xampp\htdocs`
   - macOS: `/Applications/XAMPP/htdocs`

3. **Start the XAMPP Control Panel**  
   Open the XAMPP Control Panel and start the Apache server.

4. **Access the Project in Your Browser**  
   Open your web browser and go to: localhost/RBSMS


