<x-mail::message>
# 🎉 Order Completed 🎉

We are thrilled to inform you that your order has been successfully completed! Your map file is now ready for download.  
If you have any questions or need further assistance, feel free to reach out to our support team at <strong>support@buyrustmaps.store</strong> or discord <strong style="color: #7289da">ilobber</strong>. We're here to help!

<x-mail::button :url="config('app.url').'/download/file/sha5/'.$link">
Download Map
</x-mail::button>

Thanks,<br>
BuyRustMapsStore
</x-mail::message>