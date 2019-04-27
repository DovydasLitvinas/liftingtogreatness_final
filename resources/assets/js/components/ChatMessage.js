import React, { Component } from 'react';
    class  ChatMessage extends Example {
        constructor(props) {
            super(props);
            this.changeView = this.changeView.bind(this);
        }
        changeView() {
            this.props.changeView('signup')
        }
        render() {
            return (
                <div>
                    <button className="chat-button" onClick={this.changeView}>Send a message</button>
                </div>
            )
        }
    }
    export default ChatMessage;