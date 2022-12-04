import cv2
import time

class StreamLive(object):
    def __init__(self,videoname):
        self.videoname = videoname
        if self.videoname == "0":
            self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        else:
            self.video = cv2.VideoCapture(self.videoname)
        self.ptime = 0
        self.face_cascade=cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,frame = self.video.read()
        
        if self.video.get(cv2.CAP_PROP_POS_FRAMES) == self.video.get(cv2.CAP_PROP_FRAME_COUNT):
            self.video.set(cv2.CAP_PROP_POS_FRAMES,0)
        
        gray=cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)
        faces=self.face_cascade.detectMultiScale(gray,1.1,4)
        for (x,y,w,h) in faces:
            frame=cv2.rectangle(frame,(x,y),(x+w,y+h),(0,255,0),3)

        
        
        # self.ctime = time.time()
        # self.fps = 1/(self.ctime - self.ptime)
        # self.ptime = self.ctime
        # cv2.putText(frame,f"{int(self.fps)}",(20,35),1,cv2.FONT_HERSHEY_COMPLEX,(0,255,0),2)



        ret,jpg = cv2.imencode('.jpg',frame)
        return jpg.tobytes()