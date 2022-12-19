# Doctrine

CRUD Operations in PHP 8.

## Instalation

```
composer install
```

## Commands

### Available commands for Doctrine

```
php bin/doctrine.php
```

or (deprecated)

```
php vendor/bin/doctrine
```

### Customized commands

```bash
# insert student
php bin/insert-student.php <name student>

# insert course
php bin/insert-course.php <name course>

# list students
php bin/list-students.php

# rename student
php bin/rename-student.php <id student> <new name student>

# enroll student
php bin/enroll-student.php <id student> <id course>

# delete student
php bin/delete-student.php <id student>
```

### Some Doctrine commands

```bash
# list students
php bin/doctrine.php dbal:run-sql "SELECT * FROM student;"

# list courses
php bin/doctrine.php dbal:run-sql "SELECT * FROM course;"

# list all mapped entities
php bin/doctrine.php orm:info

# show student entity
php bin/doctrine.php orm:mapping:describe Student
```
