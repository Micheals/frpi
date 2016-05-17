<?php

/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/23/2016
 * Time: 8:44 AM
 */
namespace App\Procedure\Products;
use App\Repo\Categories\CategoryRepository;
use App\Repo\Codes\CodeRepository;
use App\Repo\Datas\DataRepository;
use App\Repo\Dimensions\DimensionRepository;
use App\Repo\LengthClasses\LengthClassRepository;
use App\Repo\Products\ProductRepository;
use App\Repo\WeightClasses\WeightClassRepository;

class Store
{
    /**
     * @var ProductRepository
     */
    private $productRepo;
    /**
     * @var DataRepository
     */
    private $dataRepo;
    /**
     * @var DimensionRepository
     */
    private $dimensionRepo;
    /**
     * @var WeightClassRepository
     */
    private $weightClassRepo;
    /**
     * @var LengthClassRepository
     */
    private $lengthClassRepo;
    /**
     * @var CodeRepository
     */
    private $codeRepo;


    /**
     * Store constructor.
     * @param ProductRepository $productRepo
     * @param DataRepository $dataRepo
     * @param DimensionRepository $dimensionRepo
     * @param WeightClassRepository $weightClassRepo
     * @param LengthClassRepository $lengthClassRepo
     * @param CodeRepository $codeRepo
     */
    public function __construct(
        ProductRepository $productRepo, DataRepository $dataRepo,
        DimensionRepository $dimensionRepo, WeightClassRepository $weightClassRepo,
        LengthClassRepository $lengthClassRepo, CodeRepository $codeRepo
    )
    {
        $this->productRepo = $productRepo;
        $this->dataRepo = $dataRepo;
        $this->dimensionRepo = $dimensionRepo;
        $this->weightClassRepo = $weightClassRepo;
        $this->lengthClassRepo = $lengthClassRepo;
        $this->codeRepo = $codeRepo;
    }

    public function create($data)
    {
//        product table
        $product = $this->productRepo->create($data);
        $dataAttr = [
            'model'=>$data['model'],
            'price'=>$data['price'],
            'tax_price'=>$data['tax_price'],
            'quantity'=>$data['quantity'],
            'minimum_quantity'=>$data['minimum_quantity'],
            'seo_keyword'=>$data['seo_keyword'],
            'date_available'=>$data['date_available'],
            'weight'=>$data['weight'],
            'status'=>$data['status'],
            'product_id'=>$product->id,
            'image'=>$data['image']
        ];
//        datas table
        $dataId = $this->dataRepo->create($dataAttr);
        $dimension = [
            'width'=>$data['width'],
            'length'=>$data['length'],
            'height'=>$data['height'],
            'data_id'=>$dataId->id,
        ];
//        dd($dimension);
        $weight_class = [
            'label'=>$data['weight_class_label'],
            'data_id'=>$dataId->id
        ];
        $length_class = [
            'label'=>$data['length_class_label'],
            'data_id'=>$dataId->id
        ];
//        dimensions table
        $this->dimensionRepo->create($dimension);
//        weight_classes table
        $this->weightClassRepo->create($weight_class);
//        length_class table
        $this->lengthClassRepo->create($length_class);
        $code = [
            'name'=>'FRPI-'.strtoupper($data['code']),
            'label'=>strtoupper(base_convert($product->id,10,36)),
            'product_id'=>$product->id
        ];
        $this->codeRepo->create($code);

        return $product;
    }

    public function update($data)
    {
        $product = $this->productRepo->update($data['id'],$data);
        $dataAttr = [
            'model'=>$data['model'],
            'price'=>$data['price'],
            'tax_price'=>$data['tax_price'],
            'quantity'=>$data['quantity'],
            'minimum_quantity'=>$data['minimum_quantity'],
            'seo_keyword'=>$data['seo_keyword'],
            'date_available'=>$data['date_available'],
            'weight'=>$data['weight'],
            'status'=>$data['status'],
            'product_id'=>$data['id'],
            'image'=>$data['image']
        ];
//        datas table
        $dataId = $this->dataRepo->update($product->data->id,$dataAttr);
        $dimension = [
            'width'=>$data['width'],
            'length'=>$data['length'],
            'height'=>$data['height'],
            'data_id'=>$dataId->id,
        ];
//        dd($dimension);
        $weight_class = [
            'label'=>$data['weight_class_label'],
            'data_id'=>$dataId->id
        ];
        $length_class = [
            'label'=>$data['length_class_label'],
            'data_id'=>$dataId->id
        ];
//        dimensions table
        $this->dimensionRepo->update($dataId->dimension->id,$dimension);
//        weight_classes table
        $this->weightClassRepo->update($dataId->weight_class->id,$weight_class);
//        length_class table
        $this->lengthClassRepo->update($dataId->length_class->id,$length_class);
        $code = [
            'name'=>'FRPI-'.strtoupper($data['code']),
            'label'=>strtoupper(base_convert($product->id,10,36)),
            'product_id'=>$product->id
        ];
        $this->codeRepo->update($product->code->id,$code);

        return $product;
    }
}