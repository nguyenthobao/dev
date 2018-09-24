<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Add React in One Minute</title>
</head>
<body>

<h2>Add React in One Minute</h2>
<p>This page demonstrates using React with no build tooling.</p>
<p>React is loaded as a script tag.</p>

<!-- We will put our React component inside this div. -->
<div id="like_button_container"></div>

<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>
<!-- Load our React component. -->
{{--<script type="text/jsx" src="/public/js/test-button.js"></script>--}}

</body>
</html>
@php($arr=[1,2,3,4])
<script type="text/jsx">
    var arr={!! json_encode($arr) !!};
    class Hello extends React.Component{
        constructor(props) {
            super(props);
            this.state={date:[new Date()+1,new Date()+1000,new Date()+2000,new Date()+3000]};
        }

       render() {
           const list= (this.state.date).map((v)=>
               <li>{v}</li>
           );
           return (
               <ul>
                   {list}
               </ul>
           )
       }
       tick(){
            this.setState({date:[new Date()+1,new Date()+1000,new Date()+2000,new Date()+3000]});
       }
       componentDidMount() {
            setInterval(
                () => this.tick(),
                1000
            );
       }
    }
    ReactDOM.render(<Hello attribute={'Harper'}/>, document.getElementById('like_button_container'));
</script>