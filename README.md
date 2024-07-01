## Database system

The project was defended as a diploma thesis at the Slovak University of Technology in Bratislava.

## About

We created a database system that merges SARS-CoV-2 database and the Substance database.

<p align="center"><img src="public/readme/database_system.png"></p>

Users of the website were divided into three groups: admin, reader, and guest. For the admin, we created a custom graphical interface. The reader and guest have a different graphical interface from the admin. The admin and reader log into the application. The guest does not log into the application. The guest has the option to register using a created registration form. After logging in, the admin and reader are divided into two groups. The reader does not have access to sections that are available only to the website admin.

Admin:

- unlimited options for viewing and reading records
- user management (assigning roles, CRUD)
- data collection and manipulation
- login retention

The reader and guest have the ability to view data from the SARS-CoV-2 and Substance databases. After logging in, the reader can view database records on a map and search using the REST API.

In the project, we compared three database modules based on performance: PostgreSQL, MySQL, and MongoDB. Additionally, we compared the performance of two caching modules: Redis and Memcached. We optimized the database modules based on hardware specifications, indexing, and data type adjustments. All tests were conducted using Grafana k6 Cloud. For testing purposes, we created a file in the project (testPerfomance.js) to define the test scenario.

## File Upload

The database records were stored in external Excel files, so we created forms for efficient data collection and processing. Only the admin has access to this section.

<p align="center"><img src="public/readme/file_upload.png"></p>

## Table data

The database records are processed into a clear table. The JavaScript library YajraDataTables was applied. It includes built-in functions for pagination, sorting, and filtering table data. Data is loaded from the server in small chunks, improving performance and reducing server load. The admin can permanently delete data, perform a soft delete, or restore data that has been soft deleted.

<p align="center"><img src="public/readme/substance_table.png"></p>

## MAP

We used the freely available JavaScript library Leaflet to display records on the map. 

<p align="center"><img src="public/readme/map.png"></p>

## REST API

We have created a user guide for using the REST API for the website users. For security reasons, we do not allow POST, PUT, and DELETE operations via the REST API. We use the GET operation to retrieve records from the database based on the URL. Users can choose between two output formats: the first is JSON and the second possible output is XML. The Postman application was used to efficiently display and test REST API requests.

<p align="center"><img src="public/readme/rest_api_susdat.png"></p>

## Change logs

We created change logs. They are used to track modifications in records. The administrator can determine which attribute was modified, who made the change, and when it was made. They can also see the old and new values of the attribute. Change logs provide us with secure control over modifications and optimization of attributes.

<p align="center"><img src="public/readme/change_log.png"></p>

