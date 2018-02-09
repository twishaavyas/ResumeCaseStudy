In order to run this file, you will need to install Laravel:  https://laravel.com/docs/5.5/installation

LARAVEL CASE STUDY:

The given case study covers the following:

Create a route /submit-cv
Fields
Name (Textfield, mandatory) 
Company (Textfield, mandatory)
Email  (Textfield, mandatory, email validation)
Qualification (Graduate/Post graduate)
Hobbies  (Textfield, mandatory) + Give add more button
Resume (upload file, allowed extension: doc,docx,pdf, filesize: less than 5MB)
If any of these values are left blank – Put server side validation 
On successful submission redirect to below route
/manage-cv

If multiple hobbies are added add in each row.
Edit | Delete
If click on edit button create a route /manage-cv/cvid?/edit
If click on delete button create a route /manage-cv/cvid?/delete
