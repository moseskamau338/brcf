import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)


Alpine.data('events', () => ({
     skip: 1,
    slider: null,
    active: 1,
    total: null,
    interval: 3000,
    autoplay: false,
    direction: 'right',
    next() {
        this.to((current, offset) => current + (offset * this.skip))
    },
    prev() {
        this.to((current, offset) => current - (offset * this.skip))
    },

    to(strategy) {
        let slider = this.$refs.slider
        window.slider = slider
        let current = slider.scrollLeft
        let offset = slider.firstElementChild.getBoundingClientRect().width

        slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
    },
    focusableWhenVisible: {
        'x-intersect:enter'() {
            this.$el.removeAttribute('tabindex')
        },
        'x-intersect:leave'() {
            this.$el.setAttribute('tabindex', '-1')
        },
    }
}));



Alpine.start()

