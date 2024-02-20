<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

var { products } = defineProps(['products']);
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
            <!-- ปุ่ม link ไปยัง Route 'product.index' -->
            <Welcome></Welcome>
        </template>
        <!-- เนื้อหาอื่น ๆ ของหน้า Dashboard -->
        <div class="header">Product List</div>
        <hr>
    </AppLayout>
    <div class="product grid grid-cols-4 gap-4">
        <div v-for="item in products" :key="item.id" class="product-item bg-white p-9 rounded shadow">
            <div class="text-lg font-bold">{{ item.product_name }}</div>
            <div><span class="content">Product ID:</span> {{ item.product_id }}</div>
            <div><span class="content">Price:</span> {{ item.price }}</div>
            <div><span class="content">Quantity:</span> {{ item.quantity }}</div>
            <div><span class="content">Details: </span>{{ item.details }}</div>
        </div>
    </div>
</template>

<style scoped>

.header{
    font-weight: bold;
    text-align: center;
    margin-top: 1.8rem;
    font-size: 1.5rem;
}

hr{
    width: 25%;
    margin: 0 auto;
    border: 0.01rem solid black;
    margin-top: 0.2rem;
}

h3{
    font-weight: bold;
}

.content{
    font-weight: bold;
}
.product-item {
    transition: all 0.4s ease; /* เพื่อให้มีการเปลี่ยนแปลงอย่างนุ่มนวล */
}

.product-item:hover {
    border-color: #fff; /* เปลี่ยนสีกรอบเมื่อ hover */
    color: #fff; /* เปลี่ยนสีข้อความเมื่อ hover */
}

/* ให้แต่ละคอลัมน์ในตารางเปลี่ยนสีเมื่อ hover */
.product-item:hover:nth-child(4n+1) {
    background-color: rgb(79, 79, 79); /* เปลี่ยนสีพื้นหลังของคอลัมน์ที่ 1, 5, 9, ... */
}

.product-item:hover:nth-child(4n+2) {
    background-color: rgb(79, 79, 79); /* เปลี่ยนสีพื้นหลังของคอลัมน์ที่ 2, 6, 10, ... */
}

.product-item:hover:nth-child(4n+3) {
    background-color: rgb(79, 79, 79); /* เปลี่ยนสีพื้นหลังของคอลัมน์ที่ 3, 7, 11, ... */
}

.product-item:hover:nth-child(4n+4) {
    background-color: rgb(79, 79, 79); /* เปลี่ยนสีพื้นหลังของคอลัมน์ที่ 4, 8, 12, ... */
}
</style>




