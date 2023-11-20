<template>
  <div>
    <div v-for="carrera in carreras" :key="carrera.id">
      {{ carrera.nombre }}
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
setup() {
  const carreras = ref([]);

  onMounted(async () => {
    try {
      const response = await axios.get('/api/carreras');
      carreras.value = response.data;
    } catch (error) {
      console.error(error);
    }
  });

  return {
    carreras
  };
},
};
</script>