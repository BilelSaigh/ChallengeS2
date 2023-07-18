function createDragHandle() {
    return `<div class="float-right"><button class='btn btn-sm btn-primary drag-handle'><i class="fa fa-arrows" aria-hidden="true"></i></button></div>`
}
function createImageEle(colSize = 12) {
    return $(
        `<div class='col-sm-${colSize} bg-white p-2 component'>
      ${createDragHandle()}
      <img width="260" border="0" src="https://static.ctctcdn.com/galileo/images/templates/Galileo_ImagePlaceholder/340x205.png" class="d-block mx-auto"/>
     </div>'`
    );
}

function createButtonEle(colSize = 12) {
    return $(
        `<div class='col-sm-${colSize} bg-white p-2 component'>
      ${createDragHandle()}
      <button class="btn btn-success d-block mx-auto">Click Me!</button>
     </div>'`
    );
}

function createRow() {
    return $(`<div class='row m-0'></div>`);
}

const createEleFnMap = {
    'image' : createImageEle,
    'button': createButtonEle
}

// Custom classes to apply to Draggable elements
// https://github.com/Shopify/draggable/tree/master/src/Draggable#api
const draggableClasses = {
    'mirror': 'opaque'
}
// Sets the height and width of the draggable mirror to the same
// height and width of the original element
function setMirrorRect(event) {
    const originalRect = event.originalSource.getBoundingClientRect();
    event.mirror.style.height = `${Math.round(originalRect.height)}px`;
    event.mirror.style.width = `${Math.round(originalRect.width)}px`;
}

// Custom Draggable class since the library doesn't support dropping out of specified
// container. See https://github.com/Shopify/draggable/issues/85
class CustomDraggable extends Draggable.Draggable {
    constructor(...args) {
        super(...args);
        this.on('drag:move', this.onDragMove.bind(this));
        this.on('drag:stop', this.onDragStop.bind(this));
    }
    onDragMove(event) {
        Array.from(this.options.droppable).map((element) => {
            if(event.sensorEvent.target === element) {
                element.classList.add('draggable-over');
                console.log(element)
                this.overElement = element;
            } else {
                element.classList.remove('draggable-over');
                this.overElement = null;
            }
        });
    }
    onDragStop(event) {
        let destination;
        if (this.overElement) {
            destination = Array.from(this.options.droppable).filter( (element) => {
                return this.overElement === element
            })[0];
            this.overElement.classList.remove('draggable-over');
            this.overElement = null;
        }
        this.options.dropCallback({
            sourceEvent: event,
            source: event.data.originalSource,
            destination
        });
    }
}

// Utility class for creating and destroying Sortable instances
class LayoutDragging {
    create() {
        this.sortable = new Draggable.Sortable(document.querySelector('.dropzone'), {
            draggable: '.col-sm-12',
            handle: '.drag-handle',
            classes: draggableClasses
        });
        this.sortable.on('mirror:attached', setMirrorRect);
        this.sortable.on('sortable:sorted', (e) => console.log('sortable:sorted', e));
        this.sortable.on('sortable:stop', (e) => console.log('sortable:stop', e));
    }
    destroy() {
        if(this.sortable) {
            this.sortable.destroy();
        }
    }
}

const layoutDragging = new LayoutDragging();
layoutDragging.create();
const draggableCards = new CustomDraggable(document.querySelector('.container-fluid'), {
    draggable: '.card',
    droppable: document.querySelectorAll('.dropzone'), // Custom option
    // splittable: '.email-body .row', // Custom Option
    appendTo: 'body', // Where to append the mirror
    classes: draggableClasses,
    dropCallback: (data) => {
        console.log('source event', data.sourceEvent);
        console.log('source element', data.source);
        console.log('dropped element', data.destination);
        if(createEleFnMap[data.source.dataset.value]) {
            const row = createRow();
            $(row).append(createEleFnMap[data.source.dataset.value]());
            $(data.destination).append(row);
        }
    }
});

draggableCards.on('mirror:attached', setMirrorRect);