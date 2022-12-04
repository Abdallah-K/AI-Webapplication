import cv2
import time
import mediapipe as mp

class PoseLive(object):
    def __init__(self,videoname):
        self.videoname = videoname
        if self.videoname == "0":
            self.video = cv2.VideoCapture(0,cv2.CAP_DSHOW)
        else:
            self.video = cv2.VideoCapture(self.videoname)
        self.ptime = 0
        self.mpDraw = mp.solutions.drawing_utils
        self.mppose = mp.solutions.pose
        self.pose=self.mppose.Pose()

    def __del__(self):
        self.video.release()
    def get_frame(self):
        ret,frame = self.video.read()
        imgrgb = cv2.cvtColor(frame,cv2.COLOR_BGR2RGB)
        results =self.pose.process(imgrgb)

        
        if self.video.get(cv2.CAP_PROP_POS_FRAMES) == self.video.get(cv2.CAP_PROP_FRAME_COUNT):
            self.video.set(cv2.CAP_PROP_POS_FRAMES,0)
        

        if results.pose_landmarks:
            self.mpDraw.draw_landmarks(frame,results.pose_landmarks,self.mppose.POSE_CONNECTIONS)
            for id,lm in enumerate(results.pose_landmarks.landmark):
                h ,w ,c =frame.shape
                cx, cy = int(lm.x*w) , int(lm.y*h)#pixel values
                cv2.circle(frame,(cx,cy),2,(0,0,255),cv2.FILLED)



     
        



        ret,jpg = cv2.imencode('.jpg',frame)
        return jpg.tobytes()