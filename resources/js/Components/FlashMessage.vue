<script setup>

</script>
<template>
  <!-- 緑のフラッシュメッセージ -->
  <div v-if="$page.props.flash.status === 'success'" class="bg-green-400 text-white p-4">
    {{ $page.props.flash.message }}
  </div>
  <!-- 赤のフラッシュメッセージ -->
  <div v-if="$page.props.flash.status === 'danger'" class="bg-red-400 text-white p-4">
    {{ $page.props.flash.message }}
  </div>

</template>