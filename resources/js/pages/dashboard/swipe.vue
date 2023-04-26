<template>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div v-for="(item, index) in items" :key="index" class="swiper-slide">
        <img :src="item.image" alt="" />
        <div class="swipe-icons" v-if="isSwiped">
          <div class="like-icon" v-if="swipeDirection === 'right'">
            <i class="fa fa-heart"></i>
          </div>
          <div class="dislike-icon" v-if="swipeDirection === 'left'">
            <i class="fa fa-thumbs-down"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide } from "vue-awesome-swiper";

// import "swiper/swiper-bundle.css";

export default {
  name: "Swiper",
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      items: [
        {
          id: 1,
          image: "https://picsum.photos/200/300?random=1",
        },
        {
          id: 2,
          image: "https://picsum.photos/200/300?random=2",
        },
        {
          id: 3,
          image: "https://picsum.photos/200/300?random=3",
        },
        {
          id: 4,
          image: "https://picsum.photos/200/300?random=4",
        },
        {
          id: 5,
          image: "https://picsum.photos/200/300?random=5",
        },
      ],
      isSwiped: false,
      swipeDirection: "",
    };
  },
  computed: {
    swiper() {
      return this.$refs.mySwiper.$swiper;
    },
  },
  mounted() {
    this.swiper.on("slideNextTransitionStart", () => {
      this.isSwiped = true;
      this.swipeDirection = "right";
    });

    this.swiper.on("slidePrevTransitionStart", () => {
      this.isSwiped = true;
      this.swipeDirection = "left";
    });

    this.swiper.on("slideChangeTransitionEnd", () => {
      this.isSwiped = false;
      this.swipeDirection = "";
    });
  },
};
</script>

<style>
.swipe-icons {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 3rem;
  color: #fff;
}

.like-icon {
  background-color: green;
}

.dislike-icon {
  background-color: red;
}

.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.swiper-button-prev,
.swiper-button-next {
  color: #fff;
}
</style>