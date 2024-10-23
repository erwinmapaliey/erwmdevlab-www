<template>
  <span>{{ formattedDate }}</span>
</template>

<script setup>
  import { computed } from 'vue'
  import moment from 'moment';

  const props = defineProps({
    date: [Date, String],
  })

  const formattedDate = computed(
    () => moment(props.date).format('MMM YYYY')
  )
</script>