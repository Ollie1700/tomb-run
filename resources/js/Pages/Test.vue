<template>
  <div>
    <h1>Hello Inertia!</h1>

    <my-component first="Oliver" middle="William Joseph" last="Pennington" />

    <h2>Run Info:</h2>
    <pre>{{ run }}</pre>
  </div>
</template>

<script lang="ts">
export default {
  props: {
    run: Array
  }
}
</script>
