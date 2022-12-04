import imp
from flask import Flask,Response,request
from face import StreamLive
from mesh import MeshLive
from hand import HandLive
from pose import PoseLive
import threading
from flask_cors import CORS


app = Flask(__name__)
CORS(app)


def resultlive(StreamLive,value):
    while True:
        frame =StreamLive.get_frame()


        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/face")
def dis_live():
    args = request.args
    for key,value in args.items():
        # print(key,value)
        pass
    return Response(resultlive(StreamLive(value),value),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')



def resultlivemesh(MeshLive,value):
    while True:
        frame =MeshLive.get_frame()


        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/mesh")
def dis_mesh():
    args = request.args
    for key,value in args.items():
        # print(key,value)
        pass
    return Response(resultlivemesh(MeshLive(value),value),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')




def resultlivehand(HandLive,value):
    while True:
        frame =HandLive.get_frame()


        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/hand")
def dis_hand():
    args = request.args
    for key,value in args.items():
        # print(key,value)
        pass
    return Response(resultlivehand(HandLive(value),value),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')


def resultlivepose(PoseLive,value):
    while True:
        frame =PoseLive.get_frame()


        yield(b'--frame\r\n'
        b'Content-Type: image/jpeg\r\n\r\n' + frame +   
        b'\r\n\r\n')



@app.route("/pose")
def dis_pose():
    args = request.args
    for key,value in args.items():
        # print(key,value)
        pass
    return Response(resultlivepose(PoseLive(value),value),
    mimetype =  'multipart/x-mixed-replace; boundary=frame')







# @app.route("/name")
# def test():
#     args = request.args
#     print(args)
#     for key,value in args.items():
#         print(key,value)
#     return f"Hello {value}"



if __name__ == "__main__":
    app.run(debug=True)