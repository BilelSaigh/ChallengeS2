<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ma super page</title>
    <meta name="description" content="Ceci est ma super page">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<style>
    .card-shadow {
        box-shadow: 4px 4px #ddd;
    }
    .opaque {
        opacity: 0.3;
    }
    #palette .card:hover {
        cursor: move;
    }
    #palette .card:active {
        transform: rotate(3deg);
        transform-origin: bottom right;
        background-color: #f2f2f2;
    }
    .dropzone {
        background-color: cornflowerblue;
        min-height: 100px;
        width: 100%;
    }
    .dropzone.draggable-over {
        background-color: blanchedalmond !important;
    }

</style>
<h1>Template de front</h1>

<?php include $this->view; ?>


    <script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.4/lib/draggable.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        function createDragHandle() {
            return `<div class="float-right"><button class='btn btn-sm btn-primary drag-handle' ><i class="fa fa-arrows" aria-hidden="true"></i></button></div>`
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

        function createconnexionFormEle(colSize = 12) {
            return $(
                `
                    <div class='col-sm-${colSize} bg-white p-2 component'>
                          ${createDragHandle()}
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>'`
            );
        }
   
        function createRow() {
            return $(`<div class='row m-0'></div>`);
        }
        function createColumns() {
            return $(`<div class='col bg-white dropzone'></div>`);
        }

        const createEleFnMap = {
            'image' : createImageEle,
            'button': createButtonEle,
            'form' : createconnexionFormEle,
            'column' : createColumns,
            'row': createRow
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
                var elementName = $(data.source).data('value');
                console.log('Element Name:', elementName);

                if(createEleFnMap[data.source.dataset.value]) {
                    const row = createRow();
                    $(row).append(createEleFnMap[data.source.dataset.value]());
                    $(data.destination).append(row);
                }
            },
        });
        draggableCards.on('mirror:attached', setMirrorRect);
        draggableCards.on('drag:stop', (event) => {
            const draggedElement = event.source;
            const newPosition = {
                name: draggedElement.dataset.value,
                position: {
                x: draggedElement.getBoundingClientRect().left,
                y: draggedElement.getBoundingClientRect().top
                }
            };

            //localStorage.positions = JSON.stringify(newPosition)
  let storedPositions = localStorage.getItem('positions');
  let positions = storedPositions ? JSON.parse(storedPositions) : {};

  // Mettre à jour les positions avec la nouvelle position
  positions[newPosition.name] = newPosition.position;

  // Enregistrer les positions mises à jour dans le localStorage
  localStorage.setItem('positions', JSON.stringify(positions));
        })
     
        // Récupérer les éléments du localStorage
      
    window.addEventListener('load', function() {
        const storedPositions = localStorage.getItem('positions');
    // Vérifier si des éléments sont stockés
    if (storedPositions) {
    // Convertir en objet JSON
    const positions = JSON.parse(storedPositions);
    Object.entries(positions).forEach(([name, x, y ]) => {
        let container = document.querySelector('.dropzone');
        if(createEleFnMap[name]){
            const element = createEleFnMap[name]();
            const row = createRow();
            $(row).append(createEleFnMap[element.value]);
            $(container).append(row);
            
            console.log(element);
        
            $(element).css({ left: `${x}px`, top: `${y}px` });
            row.append(element.get(0));
            //document.querySelector('.dropzone').appendChild(row);
            //dropzone.appendChild(element.get(0));
        
            }
        });
        } else {
        console.log('Aucun élément stocké dans le localStorage.');
        }

        const save = document.getElementById('save');
        save.addEventListener('click', function(e){
        
            e.preventDefault();
            
             var themeData = JSON.parse(storedPositions);
             console.log(themeData);
             console.log(storedPositions);
            
             $.ajax({
                 type: "post",
                 url: "pagebuilder",
                 data : themeData,
                success: function (response) {
                     console.log(response);
                    },
                error: function (xhr,status,error){
                     console.error(error)
                }
            });
        })
            
           
         });

    </script>
</body>
</html>