Codeception-DbHelper
====================

A Codeception helper to run SQL queries during tests

Add the DbHelper.php file to tests/_helpers

In the .yml file for your chosen suite, e.g. tests/acceptance.suite.yml, under the modules add Db and DbHelper. See the example file included.

Add the database configuration to codeception.yml. See the example file included.

Create a directory in tests/_data that will hold all SQL files that you would like to run.

Create as many .sql files as you like within this directory.

To run the helper form within a test use

    $I->runSQLQueries('my_directory');

The helper scans the directory for any files ending in .sql and runs them.
