<?php
/**
 * Created by PhpStorm.
 * User: wonbin
 * Date: 2017/8/19
 * Time: 23:53
 */



class ArtExpr extends Phalcon\Mvc\Model
{
    public function initialize(){

        $this->setSource('art_expr');
    }


    /**
     * @var string
     */
    public $id;

    public $name;

    public $telnum;

    public $workhours;

    public $service_proverbs;

    public $address;

    public $area;

    public $provincial_id;

    public $municipal_id;

    public $district_id;

    public $region;

    public $img;

    public $lng;

    public $lat;

    public $userid;

    public $carrieroperatorId;



}