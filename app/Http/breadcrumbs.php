<?php

// Inicio
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', url('/'));
});

// Inicio
Breadcrumbs::register('search', function($breadcrumbs, $search)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Busqueda: ' . $search, url('/buscar?search=' . $search));
});

// Categorias
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contacto', url('/contacto'));
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
    $breadcrumbs->push($category->title_plural, url($category->complete_url));
});

// Galerias
Breadcrumbs::register('gallery', function($breadcrumbs, $gallery)
{

    $breadcrumbs->parent('category', $gallery->category);
    $breadcrumbs->push($gallery->title, url($gallery->complete_url));
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
    $breadcrumbs->parent('type', $provider->type);
    $breadcrumbs->push($provider->name, url('/proveedores/' . $provider->url));
});

// Tipo Proveedor
Breadcrumbs::register('type', function($breadcrumbs, $type)
{
    $breadcrumbs->parent('providerTypes');
    $breadcrumbs->push($type->name, url($type->complete_url));
});

// Admin
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin', url('admin'));
});

// Admin > Messages
Breadcrumbs::register('admin.messages', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Mensajes', url('admin/messages'));
});

// Categories
Breadcrumbs::register('admin.categories', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Categorías', route('admin.categories.index'));
});

// Categories > Category
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

// ProviderTypes
Breadcrumbs::register('admin.providertypes', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Proveedores', route('admin.providertypes.index'));
});

// ProviderTypes > Type
Breadcrumbs::register('admin.providertypes.type', function($breadcrumbs, $providerType)
{
    $breadcrumbs->parent('admin.providertypes');
    $breadcrumbs->push($providerType->name, route('admin.providertypes.show', $providerType));
});

// ProviderTypes > Type
Breadcrumbs::register('admin.providertypes.type.provider', function($breadcrumbs, $providerType, $provider)
{
    $breadcrumbs->parent('admin.providertypes.type', $providerType);
    $breadcrumbs->push($provider->name, route('admin.providertypes.providers.show', [$providerType, $provider]));
});

