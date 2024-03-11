<div class="border border-black rounded-lg">
    <div class="flex flex-col sm:flex-row items-center justify-center">
        <button class="w-4 h-4 sm:w-12 sm:h-12 text-xl sm:text-2xl m-2 sm:m-2" onclick="decQty()">-</button>
        <input type="text" id="qtyCounter" class="quantity-counter w-8 sm:w-12 text-center border border-gray-300 rounded-md" value="0">
        <button class="w-4 h-4 sm:w-12 sm:h-12 text-xl sm:text-2xl m-2 sm:m-2" onclick="incQty()">+</button>
    </div>
</div>

<script>
    function decQty() {
        var qtyCounter = document.getElementById('qtyCounter');
        var value = parseInt(qtyCounter.value);
        if (value > 0) {
            qtyCounter.value = value - 1;
        }
        else{
            qtyCounter.value = 0;
        }
    }

    function incQty() {
        var qtyCounter = document.getElementById('qtyCounter');
        var value = parseInt(qtyCounter.value);
        qtyCounter.value = value + 1;
    }
</script>