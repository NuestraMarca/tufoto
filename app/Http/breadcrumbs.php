<?php

// Inicio
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', url('/'));
});

// Categorias
Breadcrumbs::register('categories', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Galerias', url('/galerias'));
});

// Categoria
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('categories');
    $breadcrumbs->push($category->title_plural, url('/galerias/' . $category->url));
});

// Galerias
Breadcrumbs::register('gallery', function($breadcrumbs, $gallery)
{
    $breadcrumbs->parent('category', $gallery->category);
    $breadcrumbs->push($gallery->title, url('/galerias/' . $gallery->category->url . '/' . $gallery->url));
});

// Producto
Breadcrumbs::register('product', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Producto', url('/producto'));
});

// Tarifas
Breadcrumbs::register('pricing', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tarifas', url('/tarifas'));
});

// Quienes somos
Breadcrumbs::register('we', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Quienes somos', url('/nosotros'));
});

// Proveedores
Breadcrumbs::register('providerTypes', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Proveedores', url('/proveedores'));
});

// Proveedor
Breadcrumbs::register('provider', function($breadcrumbs, $provider)
{
    $breadcrumbs->parent('providerTypes');
    $breadcrumbs->push($provider->name, url('/proveedores/' . $provider->url));
});

// Admin
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin', url('admin'));
});

// Categories
Breadcrumbs::register('admin.categories', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Categorías', route('admin.categories.index'));
});

// Categories
Breadcrumbs::register('admin.categories.category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('admin.categories');

    if($category->exists){
        $breadcrumbs->push($category->title_plural, route('admin.categories.galleries.index', $category->id));    
    }
    else{
        $breadcrumbs->push('Nueva', route('admin.categories.create'));
    }
});

// Categories > Category > Galleries
Breadcrumbs::register('admin.categories.galleries', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('admin.categories.category', $category);

    $breadcrumbs->push('Galerías', route('admin.categories.galleries.index', $category->id));
});

// Categories > Category > Galleries > Gallery
Breadcrumbs::register('admin.categories.galleries.gallery', function($breadcrumbs, $category, $gallery)
{
    $breadcrumbs->parent('admin.categories.galleries', $category);

    $breadcrumbs->push($gallery->title, route('admin.categories.galleries.show', [$category->id, $gallery->id]));
});
