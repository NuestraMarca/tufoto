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
