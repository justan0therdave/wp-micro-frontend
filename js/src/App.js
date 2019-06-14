import React from 'react';
import './App.css';

class App extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      data: null,
    };
  }

  componentDidMount() {
    fetch('http://localhost:8000/wp-json/wp_bw_calc/v1/variables')
      .then(response => response.json())
      .then(data => this.setState({ data }));
  }
  render() {
    return (
      <ul>
        {this.state.data ? this.state.data.map(item => <li>{item.name}: {item.value}</li>) : ''}
      </ul>
    )
  }
}

export default App;
