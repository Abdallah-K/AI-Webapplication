import cv2
import time
import mediapipe as mp

class MeshLive(object):
    def __init__(self,videoname):
        self.videoname = videoname
        if self.videoname == "0":
            self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        else:
            self.video = cv2.VideoCapture(self.videoname)
        self.ptime = 0
        self.mpDraw = mp.solutions.drawing_utils
        self.mpfacemesh = mp.solutions.face_mesh
        self.facemesh = self.mpfacemesh.FaceMesh()
        self.drawSpec=self.mpDraw.DrawingSpec(thickness=1, circle_radius=2)
    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,frame = self.video.read()
        imgrgb = cv2.cvtColor(frame,cv2.COLOR_BGR2RGB)
        results = self.facemesh.process(imgrgb)
        
        if self.video.get(cv2.CAP_PROP_POS_FRAMES) == self.video.get(cv2.CAP_PROP_FRAME_COUNT):
            self.video.set(cv2.CAP_PROP_POS_FRAMES,0)

        if results.multi_face_landmarks:
            for facelms in results.multi_face_landmarks:
                self.mpDraw.draw_landmarks(frame,facelms)

                for lm in facelms.landmark:
                    ih, iw, ic =frame.shape
                    x,y =int(lm.x*iw), int(lm.y*ih)
        



        ret,jpg = cv2.imencode('.jpg',frame)
        return jpg.tobytes()