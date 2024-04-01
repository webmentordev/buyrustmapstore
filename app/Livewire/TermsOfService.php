<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;


class TermsOfService extends Component
{
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.terms-of-service');
    }

    public function mount(){
        SEOMeta::setTitle("BuyRustMaps Terms Of Service");
        SEOMeta::setDescription("Read the terms of service for BuyRustMaps store for users");
        SEOMeta::setCanonical(config('app.url').'/terms-of-service');
        SEOMeta::addMeta('article:published_time', '2024-03-29T09:34:06+00:00', 'property');

        OpenGraph::setDescription('Read the terms of service for BuyRustMaps store for users');
        OpenGraph::setTitle('BuyRustMaps Terms Of Service');
        OpenGraph::setUrl(config('app.url').'/terms-of-service');
        OpenGraph::addProperty('type', 'map');

        TwitterCard::setTitle("BuyRustMaps Terms Of Service");
        TwitterCard::setSite('@buyrustmaps');

        JsonLd::setTitle('BuyRustMaps Terms Of Service');
        JsonLd::setDescription('Read the terms of service for BuyRustMaps store for users');
        JsonLd::addImage(config('app.url').'/assets/buyrustmaps_store_terms_of_service.webp');
    }
}
