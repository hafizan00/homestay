<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-backdrop">
    {{ $slot }}
</div>
<style>
    div.bg-backdrop {
        background: url(https://www.jetsetter.com/uploads/sites/7/2018/04/13-1380x1035.jpg) no-repeat center;
        background-size: cover;
    }
</style>
