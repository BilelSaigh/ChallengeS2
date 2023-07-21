import Component from "../core/Components.js";
import BrowserLink from "./BrowserLink.js";
import Button from "./Button.js";
import {Welcome} from "./Welcome.js";
import {Step1} from "./Step1.js";
import {Step2} from "./Step2.js";
import Helpers from "../core/Helpers.js";

export default class MultiStepForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            currentStep:1,
        }
    }

    handleNextButtonClick = () => {
        this.setState({ currentStep: this.state.currentStep + 1 });
    };
    handlePreviousButtonClick = () => {
        this.setState({ currentStep: this.state.currentStep - 1 });
    };


    sendData = (formData) => {
        return fetch('/api/db', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                action: 'checkDb',
                form : formData
            })
        }).then(data => {
            console.log(data); // data est maintenant la réponse de l'API
            return data;
        }).catch(error => {
            console.error('There has been a problem with your fetch operation: ', error);
            throw error;
        });

    };
    handleFormInfo = (formData) => {
        console.log(Helpers(formData.dbName, { type: 'object', properties: {properties: {type: 'string'}}}))
        this.sendData(formData)
            .then(data => {
                console.log(data)
                if (data.status === 201) {
                    this.handleNextButtonClick();
                } else {
                    console.log(data)
                }
            })
            .catch(err => console.log(err))
        //this.handleNextButtonClick();
    };

    click = (event) => {
        event.preventDefault();
        const form = document.getElementById("Step1")
        const url = form.getAttribute('action');
        const formData = new FormData(form)
        const formDataObject = Object.fromEntries(formData);
        this.handleFormInfo(formDataObject)
    };


    render() {
        new Button({
            title:"Next",
            type:"submit",
            click : this.click,
        })
        const { currentStep } = this.state;
        return {
            type: "div",
            class:"my-3 mx-4",
            id: this.idAttribute,
            attributes: {
                "data-id": this.id
            },
            children: [
                currentStep === 1 && new Welcome({ onFormChange: this.handleFormChange }),
                currentStep === 2 && new Step1({ onFormChange: this.handleFormChange }),
                currentStep === 3 && new Step2({ onFormChange: this.handleFormChange }),
                {
                    type: "div",
                    class: "buttons-container text-center",
                    children: [
                        currentStep > 1 &&
                        new Button({title: "Previous",click: this.handlePreviousButtonClick}),
                        currentStep < 3 && new Button({
                            title:"Next",
                            type:"submit",
                            click : (event) => {
                                event.preventDefault();
                                if (document.getElementById("Step1") || document.getElementById("Step1")){
                                    const form = document.getElementById("Step1")
                                    const url = form.getAttribute('action');
                                    const formData = new FormData(form)
                                    const formDataObject = Object.fromEntries(formData);
                                    this.handleFormInfo(formDataObject)
                                }else {this.handleNextButtonClick()}
                            }
                        }),
                    ],
                },
            ]
        };
    }
}
// new BrowserLink("Previous", `/step${currentStep - 1}`, this.handleFormChange)