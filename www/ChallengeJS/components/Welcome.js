import Component from "../core/Components.js";
import BrowserLink from "./BrowserLink.js";
export class Welcome extends Component{
    constructor(props) {
        super(props);
    }
    render = () => {
        const { onFormChange } = this.props;

        return {
            type: "div",
            class: "row",
            id:"Step0",
            children: [
                {
                    type: "div",
                    class: "col",
                    children: [

                        {
                            type: "h1",
                            class: "text-center",
                            children: ["Welcome"],
                        },
                        {
                            type: "p",
                            class: "text-center",
                            children: [
                                "Bienvenue chez Portfolio à Gogo!"
                                +
                                "Le site qu'il vous fait si vous souhaitez exposer votre art de la plus belle des manières"],
                        },
                    ]
                }
            ]
        }
    }
}