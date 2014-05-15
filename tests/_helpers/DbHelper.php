<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class DbHelper extends \Codeception\Module
{
  
    /**
     * Run all sql files in a given directory
     */
    public function runSQLQueries($dir = null)
    {

        if(!is_null($dir)){
            
            /**
             * We need the Db module to run the queries
             */
            $dbh = $this->getModule('Db');
            
            /**
             * The Db driver load function requires an array
             */
            $queries = array();

            /**
             * Get all the queries in the directory
             */
            foreach(glob('tests/_data/' . $dir . '/*.sql') as $sqlFile){
                $query = file_get_contents($sqlFile);
                array_push($queries, $query);
            }
            
            /**
             * If there are queries load them
             */
            if(count($queries) > 0){
                $dbh->driver->load($queries);
            }
            
        }
    }
  
}
