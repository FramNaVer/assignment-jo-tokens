<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import { defineProps } from 'vue';

var {product} = defineProps(['product']);
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Welcome to Website
            </h2>
            <!-- ปุ่ม link ไปยัง Route 'product.index' -->
            <Welcome></Welcome>
        </template>

        <!-- เนื้อหาอื่น ๆ ของหน้า Dashboard -->
    </AppLayout>
</template>
