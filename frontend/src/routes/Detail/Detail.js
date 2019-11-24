import React, { Fragment, Component } from 'react';
import { getMovie, makeComment, likeMovie } from '../../Services/Api/Movie';
import { ProgressBar, Button } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faThumbsUp, faThumbsDown } from '@fortawesome/free-solid-svg-icons';

class Detail extends Component {
    constructor(props) {
        super(props);
        console.log('detay', [props]);
        console.log('detay', props.match.params.id); this.state = {
            movie: [],
            movieId: this.props.match.params.id,
            like_dislikes: [],
            loaded: false
        }
        this.handleMakeComment = this.handleMakeComment.bind(this);
    }
    componentWillMount() {
        console.log('detay willmount', this.state.movie);
        this.getMovie();
    }
    componentDidUpdate() {
        console.log('detay didmount', this.state.movie);

        /*this.setState({
            like_dislikes: {likes:totalLikes,dislikes:totalDislikes},
        });*/

    }
    getMovie = () => {
        //this.props.dispatch(loading());
        getMovie({ id: this.props.match.params.id })
            .then(res => {
                console.log('Detail Response geldi', res);

                let totalLikes = 0;
                let totalDislikes = 0;

                res.data.like_dislikes.map(element => {
                    if (element.liked)
                        totalLikes++;
                    else
                        totalDislikes++;
                });

                this.setState({
                    movie: res.data,
                    like_dislikes: { likes: totalLikes, dislikes: totalDislikes, total: totalDislikes + totalLikes },
                    loaded: true
                });
                /*this.props.dispatch(success());
                ;*/
            })
            .catch(err => {
                /*const error = {
                  title: 'Connection Error',
                  message:
                    'We apologise but we have had an issue on our end. Please try again in a few moments.',
                };*/
                //this.props.dispatch(fail(error));
            });
    };
    handleMakeComment = (event) => {
        //this.props.dispatch(loading());
        event.preventDefault();
        console.log('Form gonderildi!');
        const data = new FormData(event.target);

        makeComment(
            {
                id: this.props.match.params.id,
                email: data.get('email'),
                full_name: data.get('full_name'),
                comment: data.get('comment')

            })
            .then(res => {
                console.log('Yorum Sonrasi Response geldi', res);
                this.setState({
                    movie: res.data,
                    loaded: true
                });

                /*this.refs.email.value = "";
                this.refs.full_name.value = "";*/
                this.refs.comment.value = "";
            })
            .catch(err => {
                /*const error = {
                  title: 'Connection Error',
                  message:
                    'We apologise but we have had an issue on our end. Please try again in a few moments.',
                };*/
                //this.props.dispatch(fail(error));
            });
    };
    handleLikeDislike = (liked) => {
        //this.props.dispatch(loading());

        likeMovie(
            {
                id: this.props.match.params.id,
                liked: liked,
            })
            .then(res => {
                console.log('Begeni Sonrasi Response geldi', res);
                let totalLikes = 0;
                let totalDislikes = 0;

                res.data.like_dislikes.map(element => {
                    if (element.liked)
                        totalLikes++;
                    else
                        totalDislikes++;
                });

                this.setState({
                    movie: res.data,
                    like_dislikes: { likes: totalLikes, dislikes: totalDislikes, total: totalDislikes + totalLikes },
                    loaded: true
                });
            })
            .catch(err => {
            });
    };
    render() {
        return (
            <Fragment>
                {this.state.loaded &&
                    <div className="row">
                        <div className="col-lg-8">
                            <h1 className="mt-4">{this.state.movie.title}</h1>
                            <hr />
                            <p>Posted on {this.state.movie.created_at}</p>
                            <hr />
                            <p>{this.state.movie.description}</p>
                            <hr />
                            <p><span>Like: {this.state.like_dislikes.likes}</span><span style={{ float: 'right' }}>Dislike: {this.state.like_dislikes.dislikes}</span></p>
                            <ProgressBar>
                                <ProgressBar variant="success" now={this.state.like_dislikes.likes * 100 / this.state.like_dislikes.total} key={1} />
                                <ProgressBar variant="danger" now={this.state.like_dislikes.dislikes * 100 / this.state.like_dislikes.total} key={2} />
                            </ProgressBar>
                            <div style={{ paddingTop: '10px' }}>
                                <Button variant="success" onClick={() => this.handleLikeDislike(true)}> <FontAwesomeIcon icon={faThumbsUp} /> Do you like the movie?</Button>
                                <Button style={{ float: 'right' }} variant="danger" onClick={() => this.handleLikeDislike(false)}> <FontAwesomeIcon icon={faThumbsDown} /> Don't you like the movie?</Button>
                            </div>
                            <hr />
                            <div className="card my-4">
                                <h5 className="card-header">Leave a Comment:</h5>
                                <form name="comment-form" onSubmit={this.handleMakeComment}>
                                    <div className="card-body">
                                        <div className="form-group row">
                                            <label htmlFor="full_name" className="col-sm-2 col-form-label">Full Name</label>
                                            <div className="col-sm-10">
                                                <input type="text" className="form-control" name="full_name" id="full_name" placeholder="Name Surname" ref='full_name' />
                                            </div>
                                        </div>
                                        <div className="form-group row">
                                            <label htmlFor="email" className="col-sm-2 col-form-label">Email</label>
                                            <div className="col-sm-10">
                                                <input type="text" className="form-control" name="email" id="email" placeholder="email@example.com" ref='email' />
                                            </div>
                                        </div>
                                        <div className="form-group">
                                            <textarea className="form-control" name="comment" rows="3" ref='comment'></textarea>
                                        </div>
                                        <button className="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            {this.state.movie.comments.map((item, key) =>
                                <div className="media mb-4" key={key}>
                                    <img className="d-flex mr-3 rounded-circle" src={"https://www.gravatar.com/avatar/" + this.MD5(item.email)} alt="" />
                                    <div className="media-body">
                                        <h5 className="mt-0">{item.full_name}</h5>
                                        {item.comment}
                                    </div>
                                    <p style={{ float: 'right' }}>{item.created_at}</p>
                                </div>
                            )}
                        </div>
                        <div className="col-lg-4">
                            {this.state.movie.images.map((item, key) =>
                                <img key={key} className="img-fluid mt-1 w-100" src={item.image} alt="Card image cap" />
                            )}
                            <hr />
                            {this.state.movie.trailers.map((item, key) =>
                                <div key={key} className="embed-responsive embed-responsive-16by9">
                                    <iframe className="embed-responsive-item" src={item.src} allowFullScreen></iframe>
                                </div>
                            )}
                            <hr />
                        </div>
                    </div>
                }
            </Fragment>
        )
    }

    MD5 = function (string) {
        function RotateLeft(lValue, iShiftBits) {
            return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
        } function AddUnsigned(lX, lY) {
            var lX4, lY4, lX8, lY8, lResult;
            lX8 = (lX & 0x80000000);
            lY8 = (lY & 0x80000000);
            lX4 = (lX & 0x40000000);
            lY4 = (lY & 0x40000000);
            lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
            if (lX4 & lY4) {
                return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
            }
            if (lX4 | lY4) {
                if (lResult & 0x40000000) {
                    return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
                } else {
                    return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
                }
            } else {
                return (lResult ^ lX8 ^ lY8);
            }
        } function F(x, y, z) { return (x & y) | ((~x) & z); }
        function G(x, y, z) { return (x & z) | (y & (~z)); }
        function H(x, y, z) { return (x ^ y ^ z); }
        function I(x, y, z) { return (y ^ (x | (~z))); }
        function FF(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        }; function GG(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        }; function HH(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };
        function II(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };
        function ConvertToWordArray(string) {
            var lWordCount;
            var lMessageLength = string.length;
            var lNumberOfWords_temp1 = lMessageLength + 8;
            var lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64)) / 64;
            var lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
            var lWordArray = Array(lNumberOfWords - 1);
            var lBytePosition = 0;
            var lByteCount = 0;
            while (lByteCount < lMessageLength) {
                lWordCount = (lByteCount - (lByteCount % 4)) / 4;
                lBytePosition = (lByteCount % 4) * 8;
                lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
                lByteCount++;
            }
            lWordCount = (lByteCount - (lByteCount % 4)) / 4;
            lBytePosition = (lByteCount % 4) * 8;
            lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
            lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
            lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
            return lWordArray;
        };
        function WordToHex(lValue) {
            var WordToHexValue = "", WordToHexValue_temp = "", lByte, lCount;
            for (lCount = 0; lCount <= 3; lCount++) {
                lByte = (lValue >>> (lCount * 8)) & 255;
                WordToHexValue_temp = "0" + lByte.toString(16);
                WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length - 2, 2);
            }
            return WordToHexValue;
        };
        function Utf8Encode(string) {
            string = string.replace(/\r\n/g, "\n");
            var utftext = "";
            for (var n = 0; n < string.length; n++) {
                var c = string.charCodeAt(n);
                if (c < 128) {
                    utftext += String.fromCharCode(c);
                }
                else if ((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                }
                else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }
            }
            return utftext;
        };
        var x = Array();
        var k, AA, BB, CC, DD, a, b, c, d;
        var S11 = 7, S12 = 12, S13 = 17, S14 = 22;
        var S21 = 5, S22 = 9, S23 = 14, S24 = 20;
        var S31 = 4, S32 = 11, S33 = 16, S34 = 23;
        var S41 = 6, S42 = 10, S43 = 15, S44 = 21;
        string = Utf8Encode(string);
        x = ConvertToWordArray(string);
        a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;
        for (k = 0; k < x.length; k += 16) {
            AA = a; BB = b; CC = c; DD = d;
            a = FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
            d = FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
            c = FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
            b = FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
            a = FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
            d = FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
            c = FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
            b = FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
            a = FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
            d = FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
            c = FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
            b = FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
            a = FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
            d = FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
            c = FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
            b = FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
            a = GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
            d = GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
            c = GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
            b = GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
            a = GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
            d = GG(d, a, b, c, x[k + 10], S22, 0x2441453);
            c = GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
            b = GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
            a = GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
            d = GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
            c = GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
            b = GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
            a = GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
            d = GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
            c = GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
            b = GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
            a = HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
            d = HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
            c = HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
            b = HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
            a = HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
            d = HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
            c = HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
            b = HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
            a = HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
            d = HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
            c = HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
            b = HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
            a = HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
            d = HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
            c = HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
            b = HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
            a = II(a, b, c, d, x[k + 0], S41, 0xF4292244);
            d = II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
            c = II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
            b = II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
            a = II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
            d = II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
            c = II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
            b = II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
            a = II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
            d = II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
            c = II(c, d, a, b, x[k + 6], S43, 0xA3014314);
            b = II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
            a = II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
            d = II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
            c = II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
            b = II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
            a = AddUnsigned(a, AA);
            b = AddUnsigned(b, BB);
            c = AddUnsigned(c, CC);
            d = AddUnsigned(d, DD);
        }
        var temp = WordToHex(a) + WordToHex(b) + WordToHex(c) + WordToHex(d);
        return temp.toLowerCase();
    };
}

export default Detail;