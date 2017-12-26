declare module '*.html' {
    import Vue, { ComponentOptions } from 'vue'
    interface WithRender {
      <V>(options: ComponentOptions<V>): ComponentOptions<V>
      <V>(component: V): V
    }
    const withRender: WithRender
    export default withRender
  }