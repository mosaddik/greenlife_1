<?php
require_once('Db.php');
/**
 * Created by PhpStorm.
 * User: Future Move IT2
 * Date: 11/19/2016
 * Time: 2:23 PM
 */
class config_model extends CI_Model
{
public function get_config($args=null)
{

    $select[] = null;

    if ($args == null)
    {
        $db_query = array(
            'key' => null,
            'value' => null,
            'db_table' => 'config',
            'page_limit' => 20
        );
        array_push($select, $db_query);
    }

    else
    {
        foreach ($args as $key => $value) {
            if ($value) {

                $db_query = array(
                    'key' => $key,
                    'value' => $value,
                    'db_table' => 'config',
                );
            }
            array_push($select, $db_query);
        }
    }
    $database = new db();
    $data = $database->get_data($select);


    if ($data) {
        return $data;
    } else
        return false;

}


}