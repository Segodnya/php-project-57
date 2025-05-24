# Goal

The ability to create fully functional websites from scratch using modern technologies is the reason people come to Hexlet. Project 4 caps off the entire learning experience and encompasses all key aspects of web development.

A significant focus of this project is on creating entities using ORM and defining the relationships between them (o2m, m2m). Students will design models and their mapping to the database. This allows for a higher level of abstraction, enabling work not with raw data, but with related sets of objects that have convenient (semantic) access to the dependent entities.

The presence of entities simplifies testing. Now, test data is created not manually, but through a factory mechanism. Factories describe the data format and create entities on demand, immediately adding them to the database.

For greater automation, the project uses resource routing, which helps to standardize and simplify work with typical CRUD operations. This fosters a correct understanding of URL formation and their interconnections.

CRUD operations are closely tied to forms, which are used for creating and editing entities. By default, Laravel provides very limited support for forms, which can lead to spending a lot of time (really a lot!) on them. A library has been added to the project to significantly speed up form generation and error output.

As soon as users with the ability to create something appear on the site, authorization becomes necessary. Authorization is the process of granting rights to perform actions on resources and controlling their execution. It is often involved when trying to change forbidden things, for example, the settings of another user's account. The authorization mechanism in Laravel is built directly into the framework, making it a crucial feature. The project implements authorization 100%.

One of the important and typical tasks in web development is creating forms for data filtering. With the wrong approach, this task can turn into a tangled mess of code. The project allows for practicing this aspect by using convenient libraries that demonstrate the correct way to solve this problem.

Project maintenance is just as important as development. A developer must be confident that their code works correctly, and for that, they write tests. However, tests cannot guarantee 100% functionality, so a mechanism is needed to track errors that occur in production and notify about them. Error collectors, such as Rollbar, solve this task. Such a service collects errors in real-time and sends information about them through various channels like Slack or email. The project is a great way to practice integrating such a service.

# Description

Task Manager is a task management system similar to http://www.redmine.org/. It allows users to create tasks, assign executors, and change their statuses. Registration and authentication are required to work with the system.

# Demo

https://php-task-manager-ru.hexlet.app/
