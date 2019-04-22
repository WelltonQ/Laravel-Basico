<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listagem dos produtos';

        $products = $this->product->all();

        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $title = 'Cadastrar Novo Produto';

        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];

        return view('painel.products.create', compact('title', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());

        return 'Cadastrando...';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests()
    {
        /*
            $insert = $this->product->create([
                    'name'        => 'Nome do produto 2',
                    'number'      => 433445,
                    'active'      => false,
                    'category'    => 'eletronicos',
                    'description' => 'Description of product',
                ]);
            
            if ($insert)
                return 'Inserido com sucesso';
            else
                return 'Falha ao inserir';
        */
        /*
        $prod = $this->product->find(5);
        $prod->name        = 'Update';
        $prod->number      = 123456798;
        $prod->active      = true;
        $prod->category    = 'eletronicos';
        $prod->description = 'Description Update';
        $update = $prod->save();
        
        if ($update)
            return 'Alterado com sucesso!';
        else
            return 'Falha ao alterar.';
        
        $prod = $this->product->find(4);
        $update = $prod->update([
                    'name'        => 'Update test',
                    'number'      => 123,
                    'active'      => true,
        ]);

        if ($update)
            return 'Alterado com sucesso!';
        else
            return 'Falha ao alterar.';
        

        $update = $this->product
                            ->where('number', 6776)
                            ->update([
                                        'name'        => 'Update test 2',
                                        'number'      => 1223,
                                        'active'      => true,
                                    ]);
        
        if ($update)
            return 'Alterado com sucesso 2!';
        else
            return 'Falha ao alterar 2.';
        */
        $prod = $this->product->find(2);
        $delete = $prod->delete();

        if($delete)
            return 'Deletado com sucesso!';
        else
            return 'Falha ao deletar';
        }
}
