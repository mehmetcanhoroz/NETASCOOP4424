import React, { Component, Fragment } from 'react';

class Content extends Component {

  render() {
    return (
      <Fragment>
        <main role="main">
          <div className="container" style={{paddingTop: '5em'}} >
            {this.props.children}
            <hr />
          </div>
        </main>
      </Fragment>

    );
  }
}

export default Content;