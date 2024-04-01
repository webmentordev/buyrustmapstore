<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class PrivacyPolicy extends Component
{
    #[Layout('layouts.base')] 
    public function render()
    {
        return view('livewire.privacy-policy');
    }

    public function mount(){
        SEOMeta::setTitle("BuyRustMaps Privacy Policy");
        SEOMeta::setDescription("Read the privacy policy of BuyRustMaps store for users");
        SEOMeta::setCanonical(config('app.url').'/privacy-policy');
        SEOMeta::addMeta('article:published_time', '2024-03-29T09:34:06+00:00', 'property');

        OpenGraph::setDescription('Read the privacy policy of BuyRustMaps store for users');
        OpenGraph::setTitle('BuyRustMaps Privacy Policy');
        OpenGraph::setUrl(config('app.url').'/privacy-policy');
        OpenGraph::addProperty('type', 'map');

        TwitterCard::setTitle("BuyRustMaps Privacy Policy");
        TwitterCard::setSite('@buyrustmaps');

        JsonLd::setTitle('BuyRustMaps Privacy Policy');
        JsonLd::setDescription('Read the privacy policy of BuyRustMaps store for users');
        JsonLd::addImage(config('app.url').'/assets/buyrustmaps_store_privacy_policy.webp');
    }
}
