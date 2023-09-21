import Component from "../core/Components.js";
import BrowserLink from "./BrowserLink.js";
import Input from "./Input.js";
import Button from "./Button.js";
export class Step1 extends Component{
    constructor(props) {
        super(props);
        this.state = {
            dbName : "",
            username : "",
            password : "",
            dbHost : "",
            tbPrefix : "",
        }

    }
    handleInputChange = (event) => {
        console.log('ok')
        const { name, value } = event.target;

        this.setState({
            [name]: value,
        });
        console.log(this.state)
    };

    handleFormSubmit = () => {
        // this.props.onFormChange(this.state); // Passer les valeurs des champs au composant
        console.log(this.state)
        const form1 = document.getElementById("Step1")
        const dbName = form1.elements["dbName"].value;
        const username = form1.elements["username"].value;
        const password = form1.elements["password"].value;
        const dbHost = form1.elements["dbHost"].value;
        const tbPrefix = form1.elements["tbPrefix"].value;
        const formData = {
            dbName: dbName,
            username:username,
            password:password,
            dbHost:dbHost,
            tbPrefix:tbPrefix,
        };
        this.sendData(formData)
            .then(data => {
                if (data.status === 201) {
                    console.log(data)
                    this.handleNextButtonClick();
                } else {
                    console.log("Echoué;;                                                                                    ddd d")
                    console.log(data)
                }
            })
            .catch(err => console.log(err))
    };
    render = () => {
        const { action = "", method ="POST", style } = this.props
        return {
            type: "form",
            attributes: {
                method: method || "get",
                // action: action || null,
                style: style || null,
                id: "Step1",
            },
            children: [

                new Input({
                    name:"dbName",
                    type:"text",
                    title: "Database Name",
                    style: { width: "200px" },
                    value: this.state.dbName,
                    change: this.handleInputChange,

                }),
                new Input({
                    name:"username",
                    type:"text",
                    title: "Username",
                    style: { width: "200px" },
                    value: this.state.username,
                    change: this.handleInputChange,
                }),
                new Input({
                    name:"password",
                    title: "Password",
                    type:"password",
                    style: { width: "200px" },
                    min:"8",
                    value: this.state.password,
                    change: this.handleInputChange,
                }),
                new Input({
                    name:"dbHost",
                    type:"text",
                    title: "Database Host",
                    style: { width: "200px" },
                    value: this.state.dbHost,
                    change: this.handleInputChange,
                }),
                new Input({
                    name:"tbPrefix",
                    type:"text",
                    title: "Table Prefix",
                    style: { width: "200px" },
                    value: this.state.tbPrefix,
                    change: this.handleInputChange,
                }),
                {
                    type: "div",
                    class: "buttons-container text-center",
                    children: [
                        new Button({type:"cancel",title: "Previous",click: this.handlePreviousButtonClick}),
                        new Button({
                            name:"submit",
                            type:"submit",
                            title:"Next",
                            click: (event) => {
                                event.preventDefault();
                                this.handleFormSubmit()
                            }
                        })
                    ]
                }
            ],

        }
    }

}