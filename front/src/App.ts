import { Vue, Component, Prop } from "vue-property-decorator";
import WithRender from './App.html';

@WithRender

@Component({})
export default class Hello extends Vue {
     
    name: string = "World";

    get getName(): string {
        return this.name;
    }
}