import React, { Component, Fragment } from 'react';

class Content extends Component {

  render() {
    return (
      <Fragment>
        <p>Content burada</p>
        {this.props.children}
      </Fragment>
        
    );
  }
}

export default Content;