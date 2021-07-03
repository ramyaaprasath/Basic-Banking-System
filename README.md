# Basic-Banking-System 
Graduate Rotational Internship Program - The Sparks Foundation
## Problem Statement
- Create a simple dynamic website which has the following specs.
- Start with creating a dummy data in database for upto 10
customers. Database options: Mysql, Mongo, Postgres, etc.
Customers table will have basic fields such as name, email,
current balance etc. Transfers table will record all transfers
happened.
- Flow: Home Page > View all Customers > Select and View one
Customer > Transfer Money > Select customer to transfer to >
View all Customers .
- No Login Page. No User Creation. Only transfer of money
between multiple users.
- Host the website at 000webhost, github.io, heroku app or any
other free hosting provider. Check in code in gitlab.

## Technologies Used
<img src="https://user-images.githubusercontent.com/75536064/124356109-037e0c80-dc32-11eb-9392-a729812c1f84.png" width="50"><img src="https://user-images.githubusercontent.com/75536064/124356053-c6b21580-dc31-11eb-9e48-180d9c712ffc.png"  width="50"><img src="https://user-images.githubusercontent.com/75536064/124356142-24466200-dc32-11eb-876e-9fc4da0b6cfd.png"  width="50"><img src="https://user-images.githubusercontent.com/75536064/124356118-0d077480-dc32-11eb-93b0-b75eebd34abf.png"  width="50">
## About 
<div align="justify">
Computerizing the transactions and entries is the main objective of the project. The application using PHP and MySQL handles some of the basic operations like 'view all users', 'Transfer of money between multiple users', 'Display all transactions'. The homepage consists of two buttons, Start Now, which allows the admin to get started with the application, allowing him to view all the registered users. Only admin can access the portal, and view all customers. Show transactions button allows the admin to view the history of all the transactions which allows the admin to track any credit/debit issue if any. In the view page, basic details like name, email of the user and their account balance is displayed. Once the admin clicks the transact button, the page redirects to transaction page where the detail of the person from whose account the money needs to be transfered is displayed. There is an option for the admin to select the person to which the entered amount needs to be transfered. This is shown via a dropdown where list of all the users available is displayed to make it an user friendly interface. Thus the admin transfers money between multiple users, in the transaction page. The transaction entry into the database is automated. Once the transaction is successful, the admin is redirected to 'all transactions' page, where all the transaction entries are shown to the admin. Every page has a redirect to home page, so that the admin can redirect to home page as required.
</div>

## Screenshots
### Website
![image](https://user-images.githubusercontent.com/75536064/124357729-ae92c400-dc3a-11eb-9cac-96928ed52d88.png)
IN | ACTION
:-------------------------:|:-------------------------:
![image](https://user-images.githubusercontent.com/75536064/124357744-c0746700-dc3a-11eb-8d6e-ae808bc0b205.png) | ![image](https://user-images.githubusercontent.com/75536064/124357766-d7b35480-dc3a-11eb-9bdd-6a0663972eb5.png)
![image](https://user-images.githubusercontent.com/75536064/124357789-f3b6f600-dc3a-11eb-83a9-af64c6935cc2.png) |  ![image](https://user-images.githubusercontent.com/75536064/124357803-06c9c600-dc3b-11eb-8abd-03d2deb64b12.png)
![image](https://user-images.githubusercontent.com/75536064/124357822-1e08b380-dc3b-11eb-8cca-9bedb73e4b12.png) |  ![image](https://user-images.githubusercontent.com/75536064/124357830-295bdf00-dc3b-11eb-94e2-2b144d613fae.png)


### Database
![image](https://user-images.githubusercontent.com/75536064/124355822-cb29fe80-dc30-11eb-8a15-f83dab60cac2.png)
![image](https://user-images.githubusercontent.com/75536064/124355831-d3823980-dc30-11eb-9766-f0439bc133db.png)
