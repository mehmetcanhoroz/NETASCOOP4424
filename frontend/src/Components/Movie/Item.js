import React, { Component } from 'react';
import { Link } from 'react-router-dom';

class Item extends Component {
    constructor(props) {
        super(props);
        console.log('gelen prop', props);
    }

    render() {
        return (
            <div className="col-md-4">
                <div className="card mb-4 box-shadow">
                    <img alt="moviecover" className="card-img-top" src={this.props.movie.images[0].image} data-holder-rendered="true" />
                    <div className="card-body">
                        <h5 className="card-text">{this.props.movie.title}</h5>
                        <p className="card-text">{this.props.movie.description.substring(0, 150)}...</p>
                        <div className="d-flex justify-content-between align-items-center">
                            <div className="btn-group">
                                <span className="btn btn-sm btn-outline-secondary">
                                    My Score: {this.props.movie.my_score}/10
                                </span>
                            </div>
                            <small className="text-muted">{this.props.movie.duration} mins</small>
                        </div>
                        <Link className='btn btn-primary my-2 d-flex' to={'/movies/' + this.props.movie.id}>See Details</Link>
                    </div>
                </div>
            </div>
        );
    }
}

export default Item;
