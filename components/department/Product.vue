<template>
  <div class="tilt" :class="index % 2 == 0 ? 'product--right' : ''">
    <a class="tilt__upper-layer" :href="product.link"></a>
    <div class="product">
    <img class="product__image" :src="require(`~/assets/images/partners/${product.image}`)"></img>
    <div class="product__text">
      <div class="product__name">
        {{product.title}}
      </div>
      <div class="product__description">
        {{product.description}}
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    product: null,
    index: null,
  },
  mounted(){
    /* Store the element in el */
    let el = this.$el;

    /* Get the height and width of the element */
    const height = el.clientHeight
    const width = el.clientWidth
    const perspective = '100px'
    const rotationFactor = 1
    /*
      * Add a listener for mousemove event
      * Which will trigger function 'handleMove'
      * On mousemove
      */
    el.addEventListener('mousemove', handleMove)

    /* Define function a */
    function handleMove(e) {
      /*
        * Get position of mouse cursor
        * With respect to the element
        * On mouseover
        */
      /* Store the x position */
      const xVal = e.layerX
      /* Store the y position */
      const yVal = e.layerY

      /*
        * Calculate rotation valuee along the Y-axis
        * Here the multiplier 20 is to
        * Control the rotation
        * You can change the value and see the results
        */
      const yRotation = rotationFactor * ((xVal - width / 2) / width)

      /* Calculate the rotation along the X-axis */
      const xRotation = -rotationFactor * ((yVal - height / 2) / height)

      /* Generate string for CSS transform property */
      const string = `perspective(${perspective}) scale(1.05) rotateX(${xRotation}deg) rotateY(${yRotation}deg)`
      /* Apply the calculated transformation */
      el.style.transform = string
    }

    // scale: 1,0.9,1.1
    const transform = () => {
      let scale;
      switch(event.type){
        case 'mouseout':{
          scale = 1;
          break;
        }
        case 'mousedown':{
          scale = 0.9;
          break;
        }
        case 'mouseup':{
          scale = 1.05;
          break;
        }
        default:{
          scale: 1.05;
          break;
        }
      }
      el.style.transform = `perspective(${perspective}) scale(${scale}) rotateX(0) rotateY(0)`;
    }
    /* Add listener for mouseout event, remove the rotation */
    el.addEventListener('mouseout', transform)

    /* Add listener for mousedown event, to simulate click */
    el.addEventListener('mousedown', transform)

    /* Add listener for mouseup, simulate release of mouse click */
    el.addEventListener('mouseup', transform)
  }
}
</script>

<style scoped lang="scss">
.tilt {
  position: relative;
  z-index: 0;
  transition: box-shadow 0.1s, transform 0.1s;
  cursor: pointer;
  width: max-content;
  padding: 20px;
  max-width: 60%;
  margin: 0 auto 0 8em;
}
.tilt__upper-layer{
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  top:0;
  left:0;
}
.tilt:hover {
  box-shadow: 0px 0px 10px rgba(0,0,0, 0.6);
}
.product{
  height: 400px;
  display: grid;
  grid-template-columns: auto auto;
  place-items: center;
}
.product__image{
  height: 100%;
  max-height:100%;
  max-width: 100%;
  background-size: contain;
}
.product__text{
  font-family: 'Brygada 1918', serif;
  font-size: 1rem;
  padding: 0;
  padding-left: 2em;
  max-height: 100%;
  max-width: 100%;
}
.product__name{
  font-size: 1.5rem;
  font-weight: 500;
}
.product__description{
  text-align: justify;
}
.product--right{
  direction: rtl;
  margin: 2em 8em 2em auto;
  & .product__text{
    padding-left: 0;
    padding-right: 2em;
  }
}
</style>
