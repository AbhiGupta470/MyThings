x=imread('cameraman.tif');
for i=1:256
    for j=1:256
        if mod(i,2)==0 || mod(j,2)==0
           x(i,j)=0;
        end
    end
end
imshow(x);
